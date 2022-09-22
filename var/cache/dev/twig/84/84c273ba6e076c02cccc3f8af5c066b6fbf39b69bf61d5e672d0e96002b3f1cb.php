<?php

/* AdminBundle:CtMarque:edit.html.twig */
class __TwigTemplate_3ccd2331be96a3d4498026e2b61aafa28622023562a22eaf37044d3d067f6d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:edit.html.twig", 1);
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
        $__internal_1d3d44d2aac82f8ea71cbfc066037beff6732476378a47bd04a569ef6e6ff3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3d44d2aac82f8ea71cbfc066037beff6732476378a47bd04a569ef6e6ff3ba->enter($__internal_1d3d44d2aac82f8ea71cbfc066037beff6732476378a47bd04a569ef6e6ff3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        $__internal_f81448ece27ea152d2216e9b94a7a8260f5119950c699d0b207434da403f559f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81448ece27ea152d2216e9b94a7a8260f5119950c699d0b207434da403f559f->enter($__internal_f81448ece27ea152d2216e9b94a7a8260f5119950c699d0b207434da403f559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3d44d2aac82f8ea71cbfc066037beff6732476378a47bd04a569ef6e6ff3ba->leave($__internal_1d3d44d2aac82f8ea71cbfc066037beff6732476378a47bd04a569ef6e6ff3ba_prof);

        
        $__internal_f81448ece27ea152d2216e9b94a7a8260f5119950c699d0b207434da403f559f->leave($__internal_f81448ece27ea152d2216e9b94a7a8260f5119950c699d0b207434da403f559f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_537015b4e182c265b736c8f44b3a07fe96794efd0501899be5fbc22c986cbfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537015b4e182c265b736c8f44b3a07fe96794efd0501899be5fbc22c986cbfd7->enter($__internal_537015b4e182c265b736c8f44b3a07fe96794efd0501899be5fbc22c986cbfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d50188b38ffb95cce4b4ff6669d0e567771c3e007aff79020c494f55c0e7b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50188b38ffb95cce4b4ff6669d0e567771c3e007aff79020c494f55c0e7b841->enter($__internal_d50188b38ffb95cce4b4ff6669d0e567771c3e007aff79020c494f55c0e7b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_d50188b38ffb95cce4b4ff6669d0e567771c3e007aff79020c494f55c0e7b841->leave($__internal_d50188b38ffb95cce4b4ff6669d0e567771c3e007aff79020c494f55c0e7b841_prof);

        
        $__internal_537015b4e182c265b736c8f44b3a07fe96794efd0501899be5fbc22c986cbfd7->leave($__internal_537015b4e182c265b736c8f44b3a07fe96794efd0501899be5fbc22c986cbfd7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0ead14b1f393016b5824c7f5d8c5a292485c991c61324b37969cd8f800ff9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ead14b1f393016b5824c7f5d8c5a292485c991c61324b37969cd8f800ff9f7->enter($__internal_e0ead14b1f393016b5824c7f5d8c5a292485c991c61324b37969cd8f800ff9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8999e6f17654db9dce15808b8f931947cea0adfa1afd373914f24481ea24e999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8999e6f17654db9dce15808b8f931947cea0adfa1afd373914f24481ea24e999->enter($__internal_8999e6f17654db9dce15808b8f931947cea0adfa1afd373914f24481ea24e999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
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
        
        $__internal_8999e6f17654db9dce15808b8f931947cea0adfa1afd373914f24481ea24e999->leave($__internal_8999e6f17654db9dce15808b8f931947cea0adfa1afd373914f24481ea24e999_prof);

        
        $__internal_e0ead14b1f393016b5824c7f5d8c5a292485c991c61324b37969cd8f800ff9f7->leave($__internal_e0ead14b1f393016b5824c7f5d8c5a292485c991c61324b37969cd8f800ff9f7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/edit.html.twig");
    }
}
