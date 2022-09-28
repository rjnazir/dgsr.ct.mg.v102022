<?php

/* AdminBundle:CtTypeAnomalie:add.html.twig */
class __TwigTemplate_d99694358697e8bf1fc38619cfb70c68af50b7f43e206043a9b3ad01fe1910f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:add.html.twig", 1);
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
        $__internal_254d616299d0ec9c97ee16b0d91b724367c6031a38cb73e7eddba8ba6a509115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254d616299d0ec9c97ee16b0d91b724367c6031a38cb73e7eddba8ba6a509115->enter($__internal_254d616299d0ec9c97ee16b0d91b724367c6031a38cb73e7eddba8ba6a509115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        $__internal_6a7aa590579f22244dee4512ed1b5ceb1f8a0494373b9d0f206d252ccc9fa718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7aa590579f22244dee4512ed1b5ceb1f8a0494373b9d0f206d252ccc9fa718->enter($__internal_6a7aa590579f22244dee4512ed1b5ceb1f8a0494373b9d0f206d252ccc9fa718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254d616299d0ec9c97ee16b0d91b724367c6031a38cb73e7eddba8ba6a509115->leave($__internal_254d616299d0ec9c97ee16b0d91b724367c6031a38cb73e7eddba8ba6a509115_prof);

        
        $__internal_6a7aa590579f22244dee4512ed1b5ceb1f8a0494373b9d0f206d252ccc9fa718->leave($__internal_6a7aa590579f22244dee4512ed1b5ceb1f8a0494373b9d0f206d252ccc9fa718_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1892c0aad19cce8e84aac60ec341020de926ba2b512fc0a70afab6a0820d6015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1892c0aad19cce8e84aac60ec341020de926ba2b512fc0a70afab6a0820d6015->enter($__internal_1892c0aad19cce8e84aac60ec341020de926ba2b512fc0a70afab6a0820d6015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d986c4b8beb680502719157310f0b2cb2c5601b7231c1572a1de599ef54dae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d986c4b8beb680502719157310f0b2cb2c5601b7231c1572a1de599ef54dae3->enter($__internal_0d986c4b8beb680502719157310f0b2cb2c5601b7231c1572a1de599ef54dae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_0d986c4b8beb680502719157310f0b2cb2c5601b7231c1572a1de599ef54dae3->leave($__internal_0d986c4b8beb680502719157310f0b2cb2c5601b7231c1572a1de599ef54dae3_prof);

        
        $__internal_1892c0aad19cce8e84aac60ec341020de926ba2b512fc0a70afab6a0820d6015->leave($__internal_1892c0aad19cce8e84aac60ec341020de926ba2b512fc0a70afab6a0820d6015_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd116d10e2eadbcd24168dfcfe38491c0628d30a9038aa31ab1538303aae32bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd116d10e2eadbcd24168dfcfe38491c0628d30a9038aa31ab1538303aae32bc->enter($__internal_fd116d10e2eadbcd24168dfcfe38491c0628d30a9038aa31ab1538303aae32bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_611024f16aa44efaf4fc5a39b5a639a3533bd550737367540211b25d23c20279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611024f16aa44efaf4fc5a39b5a639a3533bd550737367540211b25d23c20279->enter($__internal_611024f16aa44efaf4fc5a39b5a639a3533bd550737367540211b25d23c20279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_611024f16aa44efaf4fc5a39b5a639a3533bd550737367540211b25d23c20279->leave($__internal_611024f16aa44efaf4fc5a39b5a639a3533bd550737367540211b25d23c20279_prof);

        
        $__internal_fd116d10e2eadbcd24168dfcfe38491c0628d30a9038aa31ab1538303aae32bc->leave($__internal_fd116d10e2eadbcd24168dfcfe38491c0628d30a9038aa31ab1538303aae32bc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeAnomalie:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/add.html.twig");
    }
}
