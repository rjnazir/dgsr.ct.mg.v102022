<?php

/* AdminBundle:CtTypeVisite:edit.html.twig */
class __TwigTemplate_0ac6bd1ec31fcf54abc5c262dd8a29ff9e76446251d2770bf11b537f1d7b2445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:edit.html.twig", 1);
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
        $__internal_268f9ed8f03557cc9eda3a23a8f758e60163b22357ffdd61bf9120ab88c3f720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268f9ed8f03557cc9eda3a23a8f758e60163b22357ffdd61bf9120ab88c3f720->enter($__internal_268f9ed8f03557cc9eda3a23a8f758e60163b22357ffdd61bf9120ab88c3f720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        $__internal_4f542b829b3a48de4627903366c0e16e9817254f205878285c2848221bfa9c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f542b829b3a48de4627903366c0e16e9817254f205878285c2848221bfa9c61->enter($__internal_4f542b829b3a48de4627903366c0e16e9817254f205878285c2848221bfa9c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268f9ed8f03557cc9eda3a23a8f758e60163b22357ffdd61bf9120ab88c3f720->leave($__internal_268f9ed8f03557cc9eda3a23a8f758e60163b22357ffdd61bf9120ab88c3f720_prof);

        
        $__internal_4f542b829b3a48de4627903366c0e16e9817254f205878285c2848221bfa9c61->leave($__internal_4f542b829b3a48de4627903366c0e16e9817254f205878285c2848221bfa9c61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29610f39537b1d50c8f381197cb02aaac58c99240d3b713f16a8faf1f664ab45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29610f39537b1d50c8f381197cb02aaac58c99240d3b713f16a8faf1f664ab45->enter($__internal_29610f39537b1d50c8f381197cb02aaac58c99240d3b713f16a8faf1f664ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c41a0a121208e76670d23b1d17be0a149a7360b211c26e801e5cf706edb33e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c41a0a121208e76670d23b1d17be0a149a7360b211c26e801e5cf706edb33e2->enter($__internal_6c41a0a121208e76670d23b1d17be0a149a7360b211c26e801e5cf706edb33e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de visite ";
        
        $__internal_6c41a0a121208e76670d23b1d17be0a149a7360b211c26e801e5cf706edb33e2->leave($__internal_6c41a0a121208e76670d23b1d17be0a149a7360b211c26e801e5cf706edb33e2_prof);

        
        $__internal_29610f39537b1d50c8f381197cb02aaac58c99240d3b713f16a8faf1f664ab45->leave($__internal_29610f39537b1d50c8f381197cb02aaac58c99240d3b713f16a8faf1f664ab45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22952207277ef142fe54eedc39bf7d7010d8fc47fcde384551161752b59a07fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22952207277ef142fe54eedc39bf7d7010d8fc47fcde384551161752b59a07fe->enter($__internal_22952207277ef142fe54eedc39bf7d7010d8fc47fcde384551161752b59a07fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3612fe36d95eeec5f3fb6b1607ed3d3eb7f498239de825788f20115500a7f81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3612fe36d95eeec5f3fb6b1607ed3d3eb7f498239de825788f20115500a7f81a->enter($__internal_3612fe36d95eeec5f3fb6b1607ed3d3eb7f498239de825788f20115500a7f81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_3612fe36d95eeec5f3fb6b1607ed3d3eb7f498239de825788f20115500a7f81a->leave($__internal_3612fe36d95eeec5f3fb6b1607ed3d3eb7f498239de825788f20115500a7f81a_prof);

        
        $__internal_22952207277ef142fe54eedc39bf7d7010d8fc47fcde384551161752b59a07fe->leave($__internal_22952207277ef142fe54eedc39bf7d7010d8fc47fcde384551161752b59a07fe_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeVisite:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/edit.html.twig");
    }
}
