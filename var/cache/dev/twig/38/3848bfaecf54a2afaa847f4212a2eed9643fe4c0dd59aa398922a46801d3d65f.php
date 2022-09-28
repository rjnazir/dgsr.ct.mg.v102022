<?php

/* AdminBundle:CtGenreTarif:edit.html.twig */
class __TwigTemplate_7e952b9f23a4ae384403fbda6337f71da69593f28d45816e81272617f703e970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreTarif:edit.html.twig", 1);
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
        $__internal_196a68620f164fe7c4e5d32d56872587c7781bed56154b0d44eb05ea78e36986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196a68620f164fe7c4e5d32d56872587c7781bed56154b0d44eb05ea78e36986->enter($__internal_196a68620f164fe7c4e5d32d56872587c7781bed56154b0d44eb05ea78e36986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        $__internal_340eb10aaf85e03566c69f89f0008820912f4f643d5fbd8c048729d4142df65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340eb10aaf85e03566c69f89f0008820912f4f643d5fbd8c048729d4142df65b->enter($__internal_340eb10aaf85e03566c69f89f0008820912f4f643d5fbd8c048729d4142df65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_196a68620f164fe7c4e5d32d56872587c7781bed56154b0d44eb05ea78e36986->leave($__internal_196a68620f164fe7c4e5d32d56872587c7781bed56154b0d44eb05ea78e36986_prof);

        
        $__internal_340eb10aaf85e03566c69f89f0008820912f4f643d5fbd8c048729d4142df65b->leave($__internal_340eb10aaf85e03566c69f89f0008820912f4f643d5fbd8c048729d4142df65b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_46576f9afe4eaf5e412070436825e2aa7100f3b9eee848ad84a4fc5da0c7f94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46576f9afe4eaf5e412070436825e2aa7100f3b9eee848ad84a4fc5da0c7f94d->enter($__internal_46576f9afe4eaf5e412070436825e2aa7100f3b9eee848ad84a4fc5da0c7f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55960cb3b4c9d5bef9b32abb1c3ce6585b0886fc383de223510192c3b4a3f379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55960cb3b4c9d5bef9b32abb1c3ce6585b0886fc383de223510192c3b4a3f379->enter($__internal_55960cb3b4c9d5bef9b32abb1c3ce6585b0886fc383de223510192c3b4a3f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de genre ";
        
        $__internal_55960cb3b4c9d5bef9b32abb1c3ce6585b0886fc383de223510192c3b4a3f379->leave($__internal_55960cb3b4c9d5bef9b32abb1c3ce6585b0886fc383de223510192c3b4a3f379_prof);

        
        $__internal_46576f9afe4eaf5e412070436825e2aa7100f3b9eee848ad84a4fc5da0c7f94d->leave($__internal_46576f9afe4eaf5e412070436825e2aa7100f3b9eee848ad84a4fc5da0c7f94d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c327eefc50719070f42292cf6d0aed09c584399c121d6c3d4265955bc29e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c327eefc50719070f42292cf6d0aed09c584399c121d6c3d4265955bc29e2d->enter($__internal_04c327eefc50719070f42292cf6d0aed09c584399c121d6c3d4265955bc29e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_073e3bfbb0fc11c48715db8830332bf931bc263760c81df23402574d3b1e66cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073e3bfbb0fc11c48715db8830332bf931bc263760c81df23402574d3b1e66cc->enter($__internal_073e3bfbb0fc11c48715db8830332bf931bc263760c81df23402574d3b1e66cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_073e3bfbb0fc11c48715db8830332bf931bc263760c81df23402574d3b1e66cc->leave($__internal_073e3bfbb0fc11c48715db8830332bf931bc263760c81df23402574d3b1e66cc_prof);

        
        $__internal_04c327eefc50719070f42292cf6d0aed09c584399c121d6c3d4265955bc29e2d->leave($__internal_04c327eefc50719070f42292cf6d0aed09c584399c121d6c3d4265955bc29e2d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de genre {% endblock %}

{% set menu_genre_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenre) }}
                        {{ form_row(edit_form.grtPrix) }}
                        {#{{ form_row(edit_form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenreTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreTarif/edit.html.twig");
    }
}
