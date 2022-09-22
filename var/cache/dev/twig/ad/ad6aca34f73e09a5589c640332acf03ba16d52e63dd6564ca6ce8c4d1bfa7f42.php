<?php

/* @User/User/edit.html.twig */
class __TwigTemplate_22e78c59c6be4e9bd7b8beff625d6b992135148f63462aa4004dff682d474d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/User/edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fcf01dbbcde89b1030e0b3f6c7a2a50c316b4b78ff0b2b8c9f8ad1677a759e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcf01dbbcde89b1030e0b3f6c7a2a50c316b4b78ff0b2b8c9f8ad1677a759e6->enter($__internal_4fcf01dbbcde89b1030e0b3f6c7a2a50c316b4b78ff0b2b8c9f8ad1677a759e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/edit.html.twig"));

        $__internal_3241c0104f04937aab58494440c518cd412366f67385ecd54b8522146860f53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3241c0104f04937aab58494440c518cd412366f67385ecd54b8522146860f53a->enter($__internal_3241c0104f04937aab58494440c518cd412366f67385ecd54b8522146860f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 33
        $context["menu_user"] = true;
        // line 34
        $context["menu_user_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcf01dbbcde89b1030e0b3f6c7a2a50c316b4b78ff0b2b8c9f8ad1677a759e6->leave($__internal_4fcf01dbbcde89b1030e0b3f6c7a2a50c316b4b78ff0b2b8c9f8ad1677a759e6_prof);

        
        $__internal_3241c0104f04937aab58494440c518cd412366f67385ecd54b8522146860f53a->leave($__internal_3241c0104f04937aab58494440c518cd412366f67385ecd54b8522146860f53a_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_375fd540517b38afb0fcb1c6818edfe74baa5579a47becd03c35606e90eae149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375fd540517b38afb0fcb1c6818edfe74baa5579a47becd03c35606e90eae149->enter($__internal_375fd540517b38afb0fcb1c6818edfe74baa5579a47becd03c35606e90eae149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ac942a579999afa5d0601502bb47926ea3427e1f217ab4887da89d5738355ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac942a579999afa5d0601502bb47926ea3427e1f217ab4887da89d5738355ada->enter($__internal_ac942a579999afa5d0601502bb47926ea3427e1f217ab4887da89d5738355ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_ac942a579999afa5d0601502bb47926ea3427e1f217ab4887da89d5738355ada->leave($__internal_ac942a579999afa5d0601502bb47926ea3427e1f217ab4887da89d5738355ada_prof);

        
        $__internal_375fd540517b38afb0fcb1c6818edfe74baa5579a47becd03c35606e90eae149->leave($__internal_375fd540517b38afb0fcb1c6818edfe74baa5579a47becd03c35606e90eae149_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e54971a5198de585e0c3b4d6eadb58ace73d9c2fca3ea08efafeefc72f1abab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e54971a5198de585e0c3b4d6eadb58ace73d9c2fca3ea08efafeefc72f1abab->enter($__internal_8e54971a5198de585e0c3b4d6eadb58ace73d9c2fca3ea08efafeefc72f1abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef7b0e49b1ea7484714de13570b7375558d87571232a06daa09db6c2ed6038d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7b0e49b1ea7484714de13570b7375558d87571232a06daa09db6c2ed6038d5->enter($__internal_ef7b0e49b1ea7484714de13570b7375558d87571232a06daa09db6c2ed6038d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisateur ";
        
        $__internal_ef7b0e49b1ea7484714de13570b7375558d87571232a06daa09db6c2ed6038d5->leave($__internal_ef7b0e49b1ea7484714de13570b7375558d87571232a06daa09db6c2ed6038d5_prof);

        
        $__internal_8e54971a5198de585e0c3b4d6eadb58ace73d9c2fca3ea08efafeefc72f1abab->leave($__internal_8e54971a5198de585e0c3b4d6eadb58ace73d9c2fca3ea08efafeefc72f1abab_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f966cd7608129db786dbccda573edf2892ef5294d1984090ec7148dac0e0635e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f966cd7608129db786dbccda573edf2892ef5294d1984090ec7148dac0e0635e->enter($__internal_f966cd7608129db786dbccda573edf2892ef5294d1984090ec7148dac0e0635e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_997bd3aa3ce7e8906e38630c6291f397b2bf21300da0230913d1e9ff772cca04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997bd3aa3ce7e8906e38630c6291f397b2bf21300da0230913d1e9ff772cca04->enter($__internal_997bd3aa3ce7e8906e38630c6291f397b2bf21300da0230913d1e9ff772cca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un utilisateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"";
        // line 57
        if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            echo "hidden";
        }
        echo "\">
                        ";
        // line 59
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrName", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrAdresse", array()), 'row');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrProfession", array()), 'row');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrTelephone", array()), 'row');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
                        <div class=\"hidden\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrPresence", array()), 'row');
        echo "
                        </div>
                        ";
        // line 69
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            // line 70
            echo "                            <div class=\"row\">
                        ";
        } else {
            // line 72
            echo "                            <div class=\"hidden\">
                        ";
        }
        // line 74
        echo "                                <div class=\"form-group\">
                                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                        <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                        <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\" class=\"form-control\">
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_roles"] ?? $this->getContext($context, "user_roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["user_role"]) {
            // line 79
            echo "                                                <option ";
            if (( !(null === $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ctRole", array())) && ($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ctRole", array()), "id", array()) == $this->getAttribute($context["user_role"], "id", array())))) {
                echo "selected";
            }
            // line 80
            echo "                                                        value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 81
            if (($this->getAttribute($context["user_role"], "roleName", array()) == "Admin")) {
                // line 82
                echo "                                                        Chef de centre
                                                    ";
            } else {
                // line 84
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "roleName", array()), "html", null, true);
                echo "
                                                    ";
            }
            // line 86
            echo "                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'row');
        echo "
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_user\"/>
                        ";
        // line 100
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 101
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                        ";
        }
        // line 106
        echo "                    </div>
                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_997bd3aa3ce7e8906e38630c6291f397b2bf21300da0230913d1e9ff772cca04->leave($__internal_997bd3aa3ce7e8906e38630c6291f397b2bf21300da0230913d1e9ff772cca04_prof);

        
        $__internal_f966cd7608129db786dbccda573edf2892ef5294d1984090ec7148dac0e0635e->leave($__internal_f966cd7608129db786dbccda573edf2892ef5294d1984090ec7148dac0e0635e_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35b302f8e60f47e293cf6280ab76361674951953754f48d61fdd502e84b1942e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b302f8e60f47e293cf6280ab76361674951953754f48d61fdd502e84b1942e->enter($__internal_35b302f8e60f47e293cf6280ab76361674951953754f48d61fdd502e84b1942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_732a0030c67fedcce932fa64acb1a24276e550e51d56ff986b7c9836a3712b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732a0030c67fedcce932fa64acb1a24276e550e51d56ff986b7c9836a3712b85->enter($__internal_732a0030c67fedcce932fa64acb1a24276e550e51d56ff986b7c9836a3712b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
";
        
        $__internal_732a0030c67fedcce932fa64acb1a24276e550e51d56ff986b7c9836a3712b85->leave($__internal_732a0030c67fedcce932fa64acb1a24276e550e51d56ff986b7c9836a3712b85_prof);

        
        $__internal_35b302f8e60f47e293cf6280ab76361674951953754f48d61fdd502e84b1942e->leave($__internal_35b302f8e60f47e293cf6280ab76361674951953754f48d61fdd502e84b1942e_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 114,  335 => 113,  320 => 107,  317 => 106,  308 => 101,  306 => 100,  298 => 95,  294 => 94,  290 => 93,  283 => 88,  276 => 86,  270 => 84,  266 => 82,  264 => 81,  259 => 80,  254 => 79,  250 => 78,  244 => 74,  240 => 72,  236 => 70,  234 => 69,  229 => 67,  224 => 65,  220 => 64,  216 => 63,  212 => 62,  208 => 61,  202 => 59,  196 => 57,  187 => 51,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% form_theme edit_form.ctCentre _self %}
{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Modification Utilisateur {% endblock %}

{% set menu_user        = true %}
{% set menu_user_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un utilisateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"{% if not is_granted('ROLE_SUPERADMIN') and not is_granted('ROLE_ADMIN') %}hidden{% endif %}\">
                        {# <div class=\"{% if (app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN')) and (app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_ADMIN')) %}hidden{% endif %}\"> #}
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.usrName) }}
                        {{ form_row(edit_form.usrAdresse) }}
                        {{ form_row(edit_form.usrProfession) }}
                        {{ form_row(edit_form.usrTelephone) }}
                        {{ form_row(edit_form.email) }}
                        <div class=\"hidden\">
                            {{ form_row(edit_form.usrPresence) }}
                        </div>
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            <div class=\"row\">
                        {% else %}
                            <div class=\"hidden\">
                        {% endif %}
                                <div class=\"form-group\">
                                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                        <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                        <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\" class=\"form-control\">
                                            {% for user_role in user_roles %}
                                                <option {% if user.ctRole is not null and (user.ctRole.id == user_role.id) %}selected{% endif %}
                                                        value=\"{{ user_role.id }}\">
                                                    {% if (user_role.roleName == 'Admin') %}
                                                        Chef de centre
                                                    {% else %}
                                                        {{ user_role.roleName }}
                                                    {% endif %}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        {{ form_row(edit_form.username) }}
                        {{ form_row(edit_form.plainPassword.first) }}
                        {{ form_row(edit_form.plainPassword.second) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_user\"/>
                        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('user_index') }}\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                        {% endif %}
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
{% endblock %}", "@User/User/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\User\\edit.html.twig");
    }
}
