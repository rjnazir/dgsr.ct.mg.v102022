<?php

/* @Admin/CtUtilisation/edit.html.twig */
class __TwigTemplate_b96cc0715bde1704f621822d0f6a4015c04ed163174aa1abe74f5c7a712b06a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9338c28495fffb029b5ac835478c3f789786f56e25931d876aa4c2c50f2c176a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9338c28495fffb029b5ac835478c3f789786f56e25931d876aa4c2c50f2c176a->enter($__internal_9338c28495fffb029b5ac835478c3f789786f56e25931d876aa4c2c50f2c176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/edit.html.twig"));

        $__internal_f71f66005af653fd51802fe2b11bd8ad8297c2c6f7b8e31b124025fba3228a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71f66005af653fd51802fe2b11bd8ad8297c2c6f7b8e31b124025fba3228a58->enter($__internal_f71f66005af653fd51802fe2b11bd8ad8297c2c6f7b8e31b124025fba3228a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9338c28495fffb029b5ac835478c3f789786f56e25931d876aa4c2c50f2c176a->leave($__internal_9338c28495fffb029b5ac835478c3f789786f56e25931d876aa4c2c50f2c176a_prof);

        
        $__internal_f71f66005af653fd51802fe2b11bd8ad8297c2c6f7b8e31b124025fba3228a58->leave($__internal_f71f66005af653fd51802fe2b11bd8ad8297c2c6f7b8e31b124025fba3228a58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0b6ab9aee1486946e8e9a3022dd5a8f1677a7856faab47cc4498c5d21b72c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b6ab9aee1486946e8e9a3022dd5a8f1677a7856faab47cc4498c5d21b72c5d->enter($__internal_a0b6ab9aee1486946e8e9a3022dd5a8f1677a7856faab47cc4498c5d21b72c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6a59af7e3a688ff538485b2e0ab1dbc3d2e03eafbd8ec4f606c4073899942a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a59af7e3a688ff538485b2e0ab1dbc3d2e03eafbd8ec4f606c4073899942a8->enter($__internal_b6a59af7e3a688ff538485b2e0ab1dbc3d2e03eafbd8ec4f606c4073899942a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisation ";
        
        $__internal_b6a59af7e3a688ff538485b2e0ab1dbc3d2e03eafbd8ec4f606c4073899942a8->leave($__internal_b6a59af7e3a688ff538485b2e0ab1dbc3d2e03eafbd8ec4f606c4073899942a8_prof);

        
        $__internal_a0b6ab9aee1486946e8e9a3022dd5a8f1677a7856faab47cc4498c5d21b72c5d->leave($__internal_a0b6ab9aee1486946e8e9a3022dd5a8f1677a7856faab47cc4498c5d21b72c5d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ac6481665b3a794895302a369b3ade716ab6b1d9fb87ea959601621be4e7584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac6481665b3a794895302a369b3ade716ab6b1d9fb87ea959601621be4e7584->enter($__internal_1ac6481665b3a794895302a369b3ade716ab6b1d9fb87ea959601621be4e7584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ba1de424d65355f0688df6ad3ea7b927e2769b03b22457777047c1812979c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba1de424d65355f0688df6ad3ea7b927e2769b03b22457777047c1812979c97->enter($__internal_4ba1de424d65355f0688df6ad3ea7b927e2769b03b22457777047c1812979c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4ba1de424d65355f0688df6ad3ea7b927e2769b03b22457777047c1812979c97->leave($__internal_4ba1de424d65355f0688df6ad3ea7b927e2769b03b22457777047c1812979c97_prof);

        
        $__internal_1ac6481665b3a794895302a369b3ade716ab6b1d9fb87ea959601621be4e7584->leave($__internal_1ac6481665b3a794895302a369b3ade716ab6b1d9fb87ea959601621be4e7584_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Utilisation {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUtilisation/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\edit.html.twig");
    }
}
